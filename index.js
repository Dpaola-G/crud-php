function cargarDatos(){
    fetch ('controllers/traerClaseController.php')
    .then (response=>response.json())
    .then (data=>{
        const tablaDatos = document.getElementById('tablaDatos');
        tablaDatos.innerHTML = '';
        data.forEach(row =>{
            const tr =document.createElement('tr');
            tr.innerHTML=`
            <td>${row.id}</td>
            <td>${row.nombre}</td>
            <td>${row.descripcion}</td>
            <td><button id='eliminar' onClick=eliminarClase(${row.d})>eliminar</button></td>
            `;

             tablaDatos.appendChild(tr);

        });
    })
};
function eliminarClase(id){
    fetch('controller/elimnarController.php? id='+id)
    .then (response =>response.text())
    .then (data=>{
        alert()
    })

}
//cargar datos cuando la pagina cargue
cargarDatos();