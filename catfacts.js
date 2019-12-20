
// hacer el fetch y mostrar todo en consola
fetch('https://catfact.ninja/fact')

.then(resp => {
    return resp.json() 
})
.then (data => {
    console.log(data.fact);

catfacts.innerHTML = `${data.fact}` ;
    
})
    .catch(error => {
        console.log('Error:', error);
    });
    
     