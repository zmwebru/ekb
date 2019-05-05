<html>
<head>
    <title>Запрос звонка</title>
</head>
<body>
<br/>
Пользователь <b><?=  $model->name; ?></b> спрашивает:
<br/>
<br/>
"<?=  CHtml::encode($model->text); ?>"
<br/><br/>

<?= !empty($model->phone) ? "Телефон: " . $model->phone . "<br/>" : ""; ?> 
<?= !empty($model->address) ? "Адрес: " . $model->address . "<br/>" : ""; ?> 

</body>
</html>
