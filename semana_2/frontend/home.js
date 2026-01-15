$().ready(
    ()=>{
        cargatabla();
    }
);

var cargatabla = ()=>{
    var html='';
    $.get('url', (lista_paises)=>{
        lista_paises = JSON.parse(lista_paises);
        $.each(lista_paises,(index, pais)=>{
            html += `<tr>
                  <td><span class="badge text-bg-secondary code-badge">${pais.Codigo}</span></td>
                  <td>${pais.Pais}</td>
                  <td class="text-end">
                    <button class="btn btn-sm btn-outline-primary"
                            data-bs-toggle="modal" data-bs-target="#countryModal"
                            data-mode="edit" data-codigo="EC" data-pais="${pais.Pais}">
                      Editar
                    </button>
                    <button class="btn btn-sm btn-outline-danger"
                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                            data-codigo="EC" data-pais="Ecuador">
                      Eliminar
                    </button>
                  </td>
                </tr>`;
        });
        $('#countriesTbody').html(html);
    })
}