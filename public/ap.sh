cd data/

states=$(ls)
echo STATES
for s in $states;do
echo $s
done
echo ---------------
echo 



for s in $states;do
echo $s;echo
 for i in $(ls $s);do
   echo "$i";
done;
echo --------------
done;
