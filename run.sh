for i in `seq 1 300`
do
phpunit FuzzTest.php; if [[ $? -gt 0 ]]; then break; fi
done
