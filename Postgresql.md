I have it. Problem is structure of "table" "public.migrations_id_seq", now have this columns:

last_value
log_cnt
is_called
When i change this lines 292 and 294 on the file /doctrine/dbal/lib/Doctrine/DBAL/Schema/PostgreSqlSchemaManager.php from this

$data = $this->_conn->fetchAll('SELECT min_value, increment_by FROM ' . $this->_platform->quoteIdentifier($sequenceName));

return new Sequence($sequenceName, $data[0]['increment_by'], $data[0]['min_value']);
to this

$data = $this->_conn->fetchAll('SELECT last_value, log_cnt FROM ' . $this->_platform->quoteIdentifier($sequenceName));

return new Sequence($sequenceName, $data[0]['log_cnt'], $data[0]['last_value']);
then all is OK and migration of database table has been created.

As we can see, this is not a issue of Builder plugin, but is a issue of Doctrine library.
