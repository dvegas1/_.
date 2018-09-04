home=`pwd`/_Docs

rm -rf $home/result/*

# Sample 1
idx=1
java -jar traprange.lastest.jar -in "idx.pdf" -out "idx.html" -el "0,1,-1"
