
#pragma once
#include <string>
#include <vector>
#include "db/table_properties_collector.h"
#include "rocksdb/comparator.h"
#include "rocksdb/env.h"
#include "rocksdb/status.h"
#include "rocksdb/types.h"
#include "rocksdb/options.h"
#include "rocksdb/immutable_options.h"

namespace rocksdb {

struct Options;
struct FileMetaData;

class Env;
struct EnvOptions;
class Iterator;
class TableCache;
class VersionEdit;
class TableBuilder;
class WritableFile;

TableBuilder* NewTableBuilder(
    const ImmutableCFOptions& options,
    const InternalKeyComparator& internal_comparator,
    const std::vector<std::unique_ptr<IntTblPropCollectorFactory>>*
        int_tbl_prop_collector_factories,
    WritableFile* file, const CompressionType compression_type,
    const CompressionOptions& compression_opts,
    const bool skip_filters = false);

// Build a Table file from the contents of *iter.  The generated file
// will be named according to number specified in meta. On success, the rest of
// *meta will be filled with metadata about the generated table.
// If no data is present in *iter, meta->file_size will be set to
// zero, and no Table file will be produced.
extern Status BuildTable(
    const std::string& dbname, Env* env, const ImmutableCFOptions& options,
    const EnvOptions& env_options, TableCache* table_cache, Iterator* iter,
    FileMetaData* meta, const InternalKeyComparator& internal_comparator,
    const std::vector<std::unique_ptr<IntTblPropCollectorFactory>>*
        int_tbl_prop_collector_factories,
    const SequenceNumber newest_snapshot,
    const SequenceNumber earliest_seqno_in_memtable,
    const CompressionType compression,
    const CompressionOptions& compression_opts,
    const Env::IOPriority io_priority = Env::IO_HIGH);

}  // namespace rocksdb