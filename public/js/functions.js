window.addEventListener('load', (event) => {
    
    // devices();
    sensors();
    recallData();
});

const recallData = () => {

    // setInterval(devices, 15000);
    setInterval(sensors, 15000);
}

const sensors = () => {

    fetch(`${base_url+'/sensors'}`, {
                    
        method: 'get'
    })
    .then(response => response.json())
    .then(async result => {

        const table = document.querySelector('#mytable').getElementsByTagName('tbody')[0];
        // const totalRecords = document.querySelector('#totalRecord');

        // totalRecords.innerHTML = result.length;

        cleanTable();

        result.forEach(record => {

            let row = table.insertRow();
            let cell0 = row.insertCell(0);
            let cell1 = row.insertCell(1);
            let cell2 = row.insertCell(2);
            let cell3 = row.insertCell(3);
            let cell4 = row.insertCell(4);
            let cell5 = row.insertCell(5);
            let cell6 = row.insertCell(6);
            let cell7 = row.insertCell(7);

            cell0.innerHTML = record.id;
            cell1.innerHTML = record.location;
            cell2.innerHTML = record.pressure;
            cell3.innerHTML = record.heart_rate;
            cell4.innerHTML = record.oxygen;
            cell5.innerHTML = record.device_id;
            cell6.innerHTML = record.created_at;
            cell7.innerHTML = record.updated_at;
        });
        
    });
}

// const devices = () => {

//     for (let id = 1; id <= 6; id++) {

//         const getData = fetch(`${base_url+'/devices/'+id}`, {
                        
//             method: 'get'
//         })
//         .then(response => response.json())
//         .then(async result => {
        
            
//             const deviceTotal = document.querySelector(`${'#totalRegistros'+id}`);

//             if (deviceTotal) {
//                 deviceTotal.innerHTML = result.length;
//             }
//         });
//     }
// }

const cleanTable = () => {

    const cleanTable = document.getElementById('mytable').getElementsByTagName('tbody')[0];
    cleanTable.innerHTML = '';
}