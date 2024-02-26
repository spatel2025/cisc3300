
onst person = {
name: 'Harvey Miles',
age: 22,
job: 'Marketing intern';
};

for (const key in person) {
if (person.hasOwnProperty(key)) {
console.log(`${key}:${person[key]}`);  
    }  
}
