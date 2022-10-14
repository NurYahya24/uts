window.onload = () => {
    let button = document.querySelector("#btn");

    
    button.addEventListener("click", calculateBMI);
};
function calculateBMI() {
    let tinggi = parseInt(document
            .querySelector("#tinggi").value);

    let berat = parseInt(document
            .querySelector("#berat").value);
    let hasil = document.querySelector("#hasil");

    if (tinggi === "" || isNaN(tinggi)) 
        hasil.innerHTML = "Mohon Isi Tinggi Badan!";

    else if (berat === "" || isNaN(berat)) 
        hasil.innerHTML = "Mohon Isi Berat Badan!";
        
    else {

        let bmi = (berat / ((tinggi * tinggi) 
                            / 10000)).toFixed(2);
      
        if (bmi < 18.6) hasil.innerHTML =
            `Kurang Berat dengan skor BMI : <span>${bmi}</span>`;
            
      
        else if (bmi >= 18.6 && bmi < 24.9) 
            hasil.innerHTML = 
                `Normal dengan skor BMI : <span>${bmi}</span>`;
      
        else hasil.innerHTML =
            `Obesitas dengan skor BMI : <span>${bmi}</span>`;
    }
}