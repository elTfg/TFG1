
<button class="btn btn-outline-success" onclick="document.getElementById('gestionUsuarios').style.display='block'" style="width:auto;"><i class="fa fa-sign-in" aria-hidden="true"></i>
Gestionar Usuarios
</button>
<div class="center mt-3">
    <div class="modal" id="gestionUsuarios" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" id="cabecera-login">
                    <h4 id="titulo-login">Gestion de Usuarios</h4>
                    <button type="button" class="close text-right" data-dismiss="modal"><span onclick="document.getElementById('gestionUsuarios').style.display='none'" 
                        class="w3-button w3-display-topright">&times;</span></button>						 
                </div>
                <div class="modal-body" style="padding:40px 50px;max-height:500px;" >
                    <div class="card-deck mb-3 text-center justify-content-center" style="max-width:900px">
                        <div class="d-inline card mb-4 shadow-sm"  id="carta modal">
                            <div class="card-header" style="width: auto;">
                            <h4 class="my-0 font-weight-normal">Listado Usuarios</h4>
                            </div>
                            <div class="card-body">
                                <table border="1" class="text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apodo</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th colspan="2">Accion</th>
                                    </tr>
                                    @foreach ($users as $usuario)
                                        <tr> 
                                         <td>{{ $usuario->id }}</td>
                                         <td>{{ $usuario->nombre }}</td>
                                         <td>{{ $usuario->apodo }}</td>
                                         <td>{{ $usuario->email }}</td>
                                         <td>{{ $usuario->roles()->value('nombre_rol') }}</td>
                                         <td><a class="btn btn-info btn-sm"  href="{{ route ('editar_usuario',$usuario->id) }}">Editar Usuario</a></td>
                                         <td><form action="{{ route('borrar_usuario', $usuario->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-danger btn-sm" style="color: white;" type="submit">Borrar Usuario</a>
                                          </form></td>
                                        </tr> 
                                    @endforeach
                                </table>    
                            </div>
                        </div>
                    </div>							
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-right" data-dismiss="modal"><span onclick="document.getElementById('gestionUsuarios').style.display='none'" 
                        class="w3-button w3-display-topright">Cancelar</span></button>
                </div>
            </div>									
        </div>						
    </div>
</div>

