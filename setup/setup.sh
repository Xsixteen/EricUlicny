#!/bin/bash

echo "Welcome to Project setup for Ericulicny.com"

echo "First specify database name:"
read database
echo "Please specify sql username:"
read username
echo "Creating Schema"
mysql -u $username -p $database < ../db/schema.sql
echo "Populating Tables with Data"
mysql -u $username -p $database < ../db/data.sql

echo "Database loading Complete"

echo "Please specify PROD Location:"
read prodlocation

cp -R ../* $prodlocation
rm -fr $prodlocation/setup

echo "Setup should be complete!"
