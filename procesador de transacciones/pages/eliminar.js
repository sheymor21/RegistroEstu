$(document).ready(function(){

    $('.delete-tra').on('click',function(e){

        e.preventDefault();

        if(confirm("seguro que quiere eliminar esto?")){
            let id = $(this).data("id");
            
            window.location.href = '../logic/delete.php?eliminarId=' + id;
        }
    })
})