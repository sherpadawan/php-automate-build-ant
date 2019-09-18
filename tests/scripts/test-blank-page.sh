#!/bin/bash

wget http://blank.org -O testhomepage.html
echo 68b329da9893e34099c7d8ad5cb9c940 > sum.txt
md5sum -c sum.txt testhomepage.html 
if [[ $? -eq 0 ]];then
    exit 0
else 
    exit 1
fi

