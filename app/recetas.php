<?
/* Declaración de modelos de Relaciones base de datos:
 * 
 * 1-1
 * 1-N
 * N-M
 * 
 * Table: DNI (id, user_id(FK), number);
 * Table: Users (id, nombre);
 * 
 */
class User extends Eloquent
{
/////Relation: 1-1: Indicamos que un usuario tiene un dni
public function dni()
	{
		return $this->has_one('Dni');
	}
}	

////Relation: 1-1: belongs to pq la tabla dni refiere al usuario (FK) 
class Dni extends Eloquent
{
	public function users()
	{
		return $this->belongs_to("User");
	}
}

$user = User::find(1);

if(is_null($user)){
	echo "Usuario no encontrado";
	return;
}

if($user->dni){
	echo "El número de DNI del usuario es ".$user->dni->number;
}else{
	echo "Este usuario no tiene DNI.";
}


//////Model relation 1-N
/*
 * T: Equipo (id, nombre)
 * T: Jugadores(id, equipo_id(FK), nombre)
 * 
 *
 */
class Equipo extends Eloquent
{
 public function jugadores()
	{
		return $this->has_many('Jugador');
	}
}	
 
class Jugador extends Eloquent
{
	public function equipo()
	{
		return $this->belongs_to("Equipo");
	}
}

$equipo = Equipo::find(2);

if(is_null($equipo)){
	echo "El equipo no ha podido ser encontrado";
	return;
}

if(!$equipo->jugadores){
	echo "El equipo no tiene jugadores.";
}

foreach ($team->jugadores as $jugador) {
	echo "$jugador->nombre pertenece al equipo $equipo->nombre";
}

//////Model relation M-N
class Estudiante extends Eloquent
{
	public function cursos()
	{
		return $this->has_many_and_belongs_to("Curso");
	}
}

?>