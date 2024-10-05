<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
        }
        .table th {
            background-color: #e9ecef;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 123, 255, 0.05);
        }
        .btn-whatsapp {
            background-color: #25D366;
            color: white;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .btn-whatsapp:hover {
            background-color: #128C7E;
            color: white;
        }
        @media (max-width: 768px) {
            .table {
                font-size: 14px;
            }
            .card-body {
                padding: 0.5rem;
            }
            .btn {
                padding: 0.375rem 0.5rem;
                font-size: 0.875rem;
            }
        }
        @media (max-width: 576px) {
            .table {
                font-size: 12px;
            }
            .card-body {
                padding: 0.25rem;
            }
            .btn {
                padding: 0.25rem 0.375rem;
                font-size: 0.75rem;
            }
        }
        .fade-in {
            animation: fadeIn 0.5s;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .shake {
            animation: shake 0.5s;
        }
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(5px); }
            50% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
            100% { transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: fixed; top: 20px; right: 20px; z-index: 1000;">
            <div class="toast-header">
                <strong class="mr-auto" id="toastTitle">Notificación</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body" id="toastMessage"></div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">Personal</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">

<div class="mt-4">
                    <h4>Agregar nuevo personal</h4>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="nuevoNombre" placeholder="Nombre del nuevo personal">
                        </div>
                        <div class="col-md-6 mb-3">
                            <button class="btn btn-success" onclick="agregarPersonal()">
                                <i class="fas fa-user-plus mr-2"></i>Agregar Personal
                            </button>
                        </div>
                    </div>
                </div>


                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><i class="fas fa-user mr-2"></i>Asistirá</th>
                                <th><i class="fas fa-calendar-check mr-2"></i>Hoy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td contenteditable="true">Aritzi</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Josmar</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Edgardy</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Yolimar</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Egilda</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Virginia</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Maryenma</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Reidy</td>
                                <td contenteditable="true"></td>
                            </tr>
                             <tr>
                                <td contenteditable="true">Rusmarly</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Edilbert</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Freddy</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Edgar</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Alejandro</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Esteban</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Daniel</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td contenteditable="true">Jonaiker</td>
                                <td contenteditable="true"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form>
                    <label for="whatsapp" title="Ingrese el número de WhatsApp del destinatario">Número de WhatsApp:</label>
                    <input type="tel" class="form-control" id="whatsapp" placeholder="Ej: 584245238570">
                    <small id="whatsappHelp" class="form-text text-muted">Formato: código de país + número</small>
                    <div class="mt-3">
                        <button class="btn btn-primary" title="Guardar los datos en el almacenamiento local" onclick="guardarDatos()">
                            <i class="fas fa-save mr-2"></i>Guardar Datos
                        </button>
                        <button class="btn btn-danger" title="Limpiar todos los datos de la tabla" onclick="limpiarDatos()">
                            <i class="fas fa-trash-alt mr-2"></i>Limpiar Todo
                        </button>
                        <button class="btn btn-whatsapp" title="Compartir la información por WhatsApp" onclick="compartirPorWhatsAppNuevo()">
                            <i class="fab fa-whatsapp mr-2"></i>Compartir por WhatsApp
                        </button>
                    </div>
                </form>

                

            

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    cargarDatosPersonal();
    cargarPersonalizacion();
});

function guardarDatos() {
    const tabla = document.querySelector('.table-responsive').innerHTML;
    const numeroWhatsApp = document.getElementById('whatsapp').value.trim();
    const filas = [];
    document.querySelectorAll('.table-responsive table tbody tr').forEach(fila => {
        filas.push({
            nombre: fila.cells[0].textContent.trim(),
            asistencia: fila.cells[1].textContent.trim()
        });
    });
    
    localStorage.setItem('datosPersonal', JSON.stringify(tabla));
    localStorage.setItem('numeroWhatsApp', numeroWhatsApp);
    localStorage.setItem('filasPersonal', JSON.stringify(filas));
    
    showToast('Éxito', 'Datos guardados correctamente', 'success');
}

function cargarDatosPersonal() {
    const datosGuardados = localStorage.getItem('datosPersonal');
    const numeroWhatsApp = localStorage.getItem('numeroWhatsApp');
    const filasGuardadas = JSON.parse(localStorage.getItem('filasPersonal'));
    
    if (datosGuardados) {
        document.querySelector('.table-responsive').innerHTML = JSON.parse(datosGuardados);
    }
    
    if (numeroWhatsApp) {
        document.getElementById('whatsapp').value = numeroWhatsApp;
    }
    
    if (filasGuardadas && filasGuardadas.length > 0) {
        const tabla = document.querySelector('.table-responsive table tbody');
        tabla.innerHTML = ''; // Limpia la tabla existente
        filasGuardadas.forEach(fila => {
            const nuevaFila = tabla.insertRow();
            const celdaNombre = nuevaFila.insertCell(0);
            const celdaAsistencia = nuevaFila.insertCell(1);
            
            celdaNombre.textContent = fila.nombre;
            celdaAsistencia.textContent = fila.asistencia;
            celdaNombre.contentEditable = true;
            celdaAsistencia.contentEditable = true;
        });
    }
}

function limpiarDatos() {
    if (confirm('¿Estás seguro de que quieres borrar todos los datos? Esta acción no se puede deshacer.')) {
        const celdas = document.querySelectorAll('td[contenteditable="true"]');
        celdas.forEach(celda => {
            if (celda.cellIndex === 1) { // Solo limpia la columna "Hoy"
                celda.textContent = '';
            }
        });
        document.getElementById('whatsapp').value = ''; // Limpia el campo de WhatsApp
        localStorage.removeItem('datosPersonal');
        localStorage.removeItem('numeroWhatsApp');
        localStorage.removeItem('filasPersonal');
        showToast('Información', 'Todos los datos han sido borrados', 'warning');
    }
}

function compartirPorWhatsAppNuevo() {
  let mensaje = "Informe de Asistencia:\n\n";
  const filas = document.querySelectorAll('.table-responsive table tbody tr');
  filas.forEach(fila => {
    const nombre = fila.cells[0].textContent.trim();
    const asistencia = fila.cells[1].textContent.trim();
    const lineaMensaje = `${nombre}: ${asistencia || 'Sin Confirmar'}\n`;
    mensaje += lineaMensaje;
  });

  const numeroTelefono = document.getElementById('whatsapp').value.trim();
  if (!numeroTelefono || !isValidPhoneNumber(numeroTelefono)) {
    showToast('Error', 'Por favor, ingresa un número de teléfono válido', 'danger');
    return;
  }

  const whatsappUrl = `https://api.whatsapp.com/send?phone=${numeroTelefono}&text=${encodeURIComponent(mensaje)}`;
  window.open(whatsappUrl, '_blank');
}

function isValidPhoneNumber(phoneNumber) {
  // Expresión regular para validar números de teléfono con código de país
  const phoneRegex = /^\+?\d{1,3}[- ]?\(?\d{1,3}\)?[- ]?\d{3,10}$/;
  return phoneRegex.test(phoneNumber);
}

function agregarPersonal() {
  const nuevoNombre = document.getElementById('nuevoNombre').value.trim();
  if (nuevoNombre) {
    const tabla = document.querySelector('.table-responsive table tbody');
    const nuevaFila = tabla.insertRow();
    const celdaNombre = nuevaFila.insertCell(0);
    const celdaAsistencia = nuevaFila.insertCell(1);
    const celdaAcciones = nuevaFila.insertCell(2);

    celdaNombre.textContent = nuevoNombre;
    celdaNombre.contentEditable = true;
    celdaAsistencia.contentEditable = true;

    // Agregar botón de editar
    const botonEditar = document.createElement('button');
    botonEditar.classList.add('btn', 'btn-primary', 'btn-sm', 'mr-2');
    botonEditar.innerHTML = '<i class="fas fa-edit"></i>';
    botonEditar.addEventListener('click', () => editarPersonal(nuevaFila));
    celdaAcciones.appendChild(botonEditar);

    // Agregar botón de eliminar
    const botonEliminar = document.createElement('button');
    botonEliminar.classList.add('btn', 'btn-danger', 'btn-sm');
    botonEliminar.innerHTML = '<i class="fas fa-trash-alt"></i>';
    botonEliminar.addEventListener('click', () => eliminarPersonal(nuevaFila));
    celdaAcciones.appendChild(botonEliminar);

    nuevaFila.classList.add('fade-in');

    document.getElementById('nuevoNombre').value = '';
    guardarDatos(); // Guarda los datos actualizados
    showToast('Éxito', `${nuevoNombre} ha sido agregado a la lista.`, 'success');
  } else {
    showToast('Error', 'Por favor, ingrese un nombre para el nuevo personal.', 'danger');
    document.getElementById('nuevoNombre').classList.add('shake');
    setTimeout(() => {
      document.getElementById('nuevoNombre').classList.remove('shake');
    }, 500);
  }
}

function editarPersonal(fila) {
  fila.cells[0].contentEditable = true;
  fila.cells[1].contentEditable = true;
  showToast('Editar', 'Ahora puedes editar los datos del personal.', 'info');
}

function eliminarPersonal(fila) {
  if (confirm('¿Estás seguro de que quieres eliminar a este personal?')) {
    fila.remove();
    guardarDatos(); // Guarda los datos actualizados
    showToast('Eliminado', 'El personal ha sido eliminado de la lista.', 'danger');
  }
}

function aplicarPersonalizacion() {
    const color = document.getElementById('colorPicker').value;
    document.body.style.backgroundColor = color;
    localStorage.setItem('backgroundColor', color);
    showToast('Personalización', 'Color de fondo aplicado', 'success');
}

function cargarPersonalizacion() {
    const color = localStorage.getItem('backgroundColor');
    if (color) {
        document.body.style.backgroundColor = color;
        document.getElementById('colorPicker').value = color;
    }
}

function showToast(title, message, type = 'success') {
    const toast = document.getElementById('toast');
    const toastTitle = document.getElementById('toastTitle');
    const toastMessage = document.getElementById('toastMessage');
    
    toastTitle.textContent = title;
    toastMessage.textContent = message;
    toast.classList.remove('bg-success', 'bg-danger', 'bg-warning');
    toast.classList.add(`bg-${type}`);
    
    $('.toast').toast({delay: 5000});
    $('.toast').toast('show');
}
</script>

</body>
</html>