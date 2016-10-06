<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<?php if(session()->has('exitoso')): ?>
<div style="background-color: lightgreen;color: white; "><?php echo e(session('exitoso')); ?></div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<div style="background-color: red;color: white; "><?php echo e(session('error')); ?></div>
<?php endif; ?>
	<form method="post" action="/api/agenda">
		<input type="text" name="nombre" placeholder="Escribe tu nombre" required="required"><br/>
		<input type="text" name="telefono" placeholder="Telefono" required="required"><br/>
		<input type="email" name="email" placeholder="E-Mail"><br/>
		<textarea name="descripcion"></textarea><br/>
		<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
		<input type="submit" name="enviar" value="Guardar Contactos">

	</form>
</body>
</html>