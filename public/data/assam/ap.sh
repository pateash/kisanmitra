cd dispur/
for x in $(ls);do
v=$(echo $x | cut -d "_" -f 1)
#echo $x
echo $v
done;

