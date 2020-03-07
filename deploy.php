<?
echo "<p>webhook start</p>";
exec('cd /home/misskabu/www/homepage/',$op);
print_r($op); 
exec('git pull');
echo "<p>webhook finish</p>";
?>