
c=0
for x in $(ls | grep predicated)
do
name=$(echo $x | cut -d '_' -f 2);
echo $name;
cp $x bhopal_$name\_predicted.json
((c+=1))
done

echo "total count is $c";
