$(function() {
    
    function departamento(){
        $.ajax({
            url:'/ubigeo/departamentos',
            type:'get',
            dataType:'json',
        }).done(function(resp){
             var data = resp.departamentos;
            if(data.length > 0){
                $("#txtdepartamento").append('<option selected disabled">Seleccionar Departamento</option>');
                $.each(data,function(key, itms){
                    $("#txtdepartamento").append('<option value="'+itms.id+'">'+itms.nombre_departamento+'</option>');
                });
            }
        })
    }
    
    function provincia(iddepartamento = 0){
        $.ajax({
            url:'/ubigeo/provincias/'+iddepartamento,
            type:'get',
            dataType:'json',
        }).done(function(resp){
             var data = resp.provincias;
            if(data.length > 0){
                $("#txtprovincia").append('<option selected disabled">Seleccionar Provincia</option>');
                $.each(data,function(key, itms){ 
                   
                    $("#txtprovincia").append('<option value="'+itms.id+'">'+itms.nombre_provincia+'</option>');
                });
            }
        })
    }

    function distrito(idprovincia = 0){
        $.ajax({
            url:'/ubigeo/distrito/'+idprovincia,
            type:'get',
            dataType:'json',
        }).done(function(resp){
             var data = resp.distritos;
            if(data.length > 0){
                $("#txtdistrito").append('<option selected disabled">Seleccionar Distrito</option>');
                $.each(data,function(key, itms){
                    $("#txtdistrito").append('<option value="'+itms.id+'">'+itms.nombre_distrito+'</option>');
                });
            }
        })
    }

    departamento();
    provincia();
    distrito();

    $("#txtdepartamento" ).on('change',function(){
        $("#txtprovincia, #txtdistrito").empty();
        let iddepartamento = $( "#txtdepartamento").val();
        provincia(iddepartamento);
    })

    $("#txtprovincia" ).on('change',function(){
        $("#txtdistrito").empty();
        let idprovincia = $("#txtprovincia").val();
        distrito(idprovincia);
    })
})

