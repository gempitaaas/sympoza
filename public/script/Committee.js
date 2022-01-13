var submit = document.getElementById('createCommittee');


window.onload = function(){ 
    getTableData();
};


function getTableData(){
    var tbl = $("#tableItemized").DataTable();
    tbl.destroy();
    $("#tableItemized").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            "url": url_get_tableCommittee,
            "type": "POST",
             "data": {"_token" : token},
        },
        columns: [
            { data: "name" },
            { data: "title", defaultContent: "-" },
            { data: "email", defaultContent: "-" },
            { data: "status", defaultContent: "-" }
        ],
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        bScrollCollapse: true,
        columnDefs: [
            {
                searchable: false,
                width: "5%",
                className: "nowrap text-center",
                targets: 0,
            },
            {
                searchable: false,
                width: "5%",
                className: "nowrap text-center",
                targets: 1,
            },
            {
                searchable: false,
                width: "20%",
                className: "nowrap text-center",
                targets: 2,
            },
            {
                width: "20%",
                className: "nowrap text-center",
                targets: 3,
            },
        ]
    });

}

function post(){
    $.ajax({
        type:"POST",
        url : pstCreateCommittee,
        data :{
        "_token" : token,
        "name" : document.getElementById('Name').value,
        "status" : document.getElementById('status').value,
        "email" : document.getElementById('Email').value,
        "title" : document.getElementById('Title').value
        },
        success : function(receiveData){
            console.log(receiveData);
            location.reload();
        },
        error:function(er)
        {
            console.log(er);
        }
    })
}

submit.onclick = function(){



 

}


