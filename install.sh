#!/bin/bash

if [ -e dump.sql ]; then
  echo '## Recuperando o banco de dados...'

  mysql -uabracepets -pabracepets -h mysql <<EOSQL
	DROP DATABASE abrace_pets;
	CREATE DATABASE abrace_pets;
EOSQL

  mysql -uabracepets -pabracepets -h mysql abrace_pets < dump.sql
else
  echo '## Voce esta sem o dump do banco. '
fi

composer install --no-scripts -vv --profile
