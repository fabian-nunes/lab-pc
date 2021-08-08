let inputError = false;
function handler() {
    return {
        fields: [],
        addNewField() {
            this.fields.push({
                name: '',
                price: ''
            });
        },
        removeField(index) {
            this.fields.splice(index, 1);
        },
        saveForm() {
            let pieces = "";
            let price = 0;
            inputError = false;

            for (let i = 0; i < this.fields.length; i++) {
                if (checkEmpty(this.fields[i].name) || checkEmpty(this.fields[i].price)) {
                    inputError = true;
                    return false;
                }

                let priceT = parseInt(this.fields[i].price, 10);
                if (!checkNumber(priceT)) {
                    inputError = true;
                    return false;
                }
            }

            for (let i = 0; i < this.fields.length; i++) {
                let priceI = parseInt(this.fields[i].price, 10);
                pieces += this.fields[i].name + "-" + this.fields[i].price + "#";
                price += priceI;
            }

            document.getElementById("total").value = pieces;
            document.getElementById("priceT").value = price;


            /*
            //console.log(this.fields[1]);
            //You can process your form using fetch() or axios
            let web_api = '127.0.0.1:8000/encomendas';
            let response =  fetch(web_api, {
                method: "POST",
                body: JSON.stringify(this.fields[index]),
                headers: {
                    "Content-Type": "application/json",
                },
            }).then((response) => {
                if (!response.ok) {
                    throw new Error("There was an error processing the request");
                }
            });*/
        }
    }
}

function checkKey() {
    var e = event || window.event;  // get event object
    var key = e.keyCode || e.which; // get key cross-browser

    if (key == 51 || key == 189) { //if it is not a number ascii code
        //Prevent default action, which is inserting character
        if (e.preventDefault) e.preventDefault(); //normal browsers
        e.returnValue = false; //IE
    }
}

function checkNumber(value) {
    return /^\d*\.?\d*$/.test(value);
}

function checkEmpty(string) {
    return (string.length === 0 || !string.trim());
}

function isNumberKey(txt, evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 46) {
        //Check if the text already contains the . character
        if (txt.value.indexOf('.') === -1) {
            return true;
        } else {
            return false;
        }
    } else {
        if (charCode > 31 &&
            (charCode < 48 || charCode > 57))
            return false;
    }
    return true;
}
