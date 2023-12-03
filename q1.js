//Q1 
//a)define two object types
// object 1
function Service(name, type, page){
    this.serviceName = name;
    this.serviceType = type;
    this.servicePage = page;
}

// object 2
function Photography(name, type){
    this.pgName = name;
    this.pgType = type;
}


//b)maintain a collection of the information using array
//array for object service
let array1 = [new Service("view", "noninteractive", "gallery"),
              new Service("book", "interaction", "book")

];

//array for object phtography
let array2 = [ new Photography("events", "people"),
                new Photography("landscape", "nature"),
                new Photography("newborn", "people"),
                new Photography("fashion", "people"),
                new Photography("portrait", "people")
];

//d)dynamically display information
//funtion to dispaly information about service
function dispalyService(){
    let tableBody = document.getElementById("table1").getElementsByTagName("tbody")[0];
    tableBody.innerHTML= "";

    array1.forEach( Service => {
        let row =tableBody.insertRow();
        let cell0 = row.insertCell(0);
        let cell1 = row.insertCell(1);
        let cell2 = row.insertCell(2);

        cell0.textContent = Service.serviceName;
        cell1.textContent = Service.serviceType;
        cell2.textContent = Service.servicePage;
    });
}

//funtion to display information about photography
function dispalyPhtography(){
    let tableBody = document.getElementById("table2").getElementsByTagName("tbody")[0];
    tableBody.innerHTML= "";

    array2.forEach( Photography => {
        let row =tableBody.insertRow();
        let cell0 = row.insertCell(0);
        let cell1 = row.insertCell(1);

        cell0.textContent = Photography.pgName;
        cell1.textContent = Photography.pgType;
    });
}

//call funtion
dispalyPhtography();
dispalyService();

//f)adding element and searching
//funtion that add to Services table
function addElementToTable1(){
    //get the input value
    let value1 = document.getElementById("input1").value;
    let value2 = document.getElementById("input2").value;
    let value3 = document.getElementById("input3").value;
    //make new object
    array1.push(new Service(value1, value2, value3));

    //call funtion to update
    dispalyService();
}

//funtion that add to Services table
function addElementToTable2(){
    //get the input value
    let value1 = document.getElementById("inputA").value;
    let value2 = document.getElementById("inputB").value;
    //make new object
    array2.push(new Photography(value1, value2));

    //call funtion to update
    dispalyPhtography();
}

// search information from both arrays
function searchArrays() {
    let searchValue = document.getElementById("searchInput").value.toLowerCase();

    // clear previous search results
    let table1Body = document.getElementById("table1").getElementsByTagName("tbody")[0];
    let table2Body = document.getElementById("table2").getElementsByTagName("tbody")[0];
    table1Body.innerHTML = "";
    table2Body.innerHTML = "";

    // search and display results for array1
    array1.forEach(service => {
        if (service.serviceName.toLowerCase().includes(searchValue) ||
            service.serviceType.toLowerCase().includes(searchValue) ||
            service.servicePage.toLowerCase().includes(searchValue)) {

            let row = table1Body.insertRow();
            let cell0 = row.insertCell(0);
            let cell1 = row.insertCell(1);
            let cell2 = row.insertCell(2);

            cell0.textContent = service.serviceName;
            cell1.textContent = service.serviceType;
            cell2.textContent = service.servicePage;
        }
    });

    // search and display results for array2
    array2.forEach(photography => {
        if (photography.pgName.toLowerCase().includes(searchValue) ||
            photography.pgType.toLowerCase().includes(searchValue)) {

            let row = table2Body.insertRow();
            let cell0 = row.insertCell(0);
            let cell1 = row.insertCell(1);

            cell0.textContent = photography.pgName;
            cell1.textContent = photography.pgType;
        }
    });
}
