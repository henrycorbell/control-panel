#!/bin/bash
echo Update notes:
read dat1
timestamp=`date --rfc-3339=seconds`
git add --all
git commit -m "Update Control Panel - SC1425 Code | Update notes: $dat1 Timestamp: $timestamp" 
git push -u origin master
