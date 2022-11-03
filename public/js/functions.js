window.addEventListener('load', (event) => {
    
    sensors();
    recallData();
});

const recallData = () => {

    setInterval(sensors, 15000);
}

const sensors = () => {

    fetch(`${base_url+'/sensors'}`, {
                    
        method: 'get'
    })
    .then(response => response.json())
    .then(async result => {

        const table = document.querySelector('#mytable').getElementsByTagName('tbody')[0];

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
            cell1.innerHTML = record.voltaje + ' V';
            cell2.innerHTML = record.amperaje + ' A';
            cell3.innerHTML = record.tiempo + ' H';
            cell4.innerHTML = record.consumo + ' KWH';
            cell5.innerHTML = record.device_id;
            cell6.innerHTML = record.created_at;
            cell7.innerHTML = record.updated_at;
        });
        
    });
}

const cleanTable = () => {

    const cleanTable = document.getElementById('mytable').getElementsByTagName('tbody')[0];
    cleanTable.innerHTML = '';
}