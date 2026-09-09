const animalContainer = document.querySelector("#animal-list");

function loadAnimals(url, successHandler) {

    fetch(url)
        .then(response => {

            console.log(response);

            if (!response.ok) {
                throw new Error("Het gaat mis: " + response.statusText);
            }

            return response.json();
        })
        .then(successHandler)
        .catch(showError);
}

function allAnimalsLoaded(animals) {

    console.log(animals);

    for (let animal of animals) {

        const animalDiv = document.createElement("div");
        animalDiv.classList.add("animal-card");

        const animalImg = document.createElement("img");
        animalImg.src = animal.img;

        const animalInfo = document.createElement("div");
        animalInfo.classList.add("animal-info");

        const animalName = document.createElement("h2");
        animalName.innerText = animal.name;
        animalName.classList.add("animal-name");

        const animalDate = document.createElement("p");
        animalDate.innerText = animal.date;
        animalDate.classList.add("animal-date");

        animalInfo.append(animalName);
        animalInfo.append(animalDate)

        animalDiv.append(animalImg);
        animalDiv.append(animalInfo);

        animalDiv.addEventListener("click", function () {

            const details = document.querySelector("#animal-details");
            if (details.style.display === "block") {
                details.style.display = "none";
            } else {
                loadAnimalDetails(animal.id);
            }
        });

        animalContainer.append(animalDiv);
    }
}

function loadAnimalDetails(id) {

    document.querySelector("#animal-details").style.display = "block";

    fetch("./webservice/actions.php?id=" + id)
        .then(response => response.json())
        .then(animal => {

            document.querySelector("#details-name").innerText = animal.name;
            document.querySelector("#details-gender").innerText = animal.gender;
            document.querySelector("#details-birth").innerText = animal["estimated date of birth"];
            document.querySelector("#details-first-observation").innerText = animal["first observation"];
            document.querySelector("#details-status").innerText = animal.status;
            document.querySelector("#details-remark").innerText = animal.remark;

            document.querySelector("#details-image").src = animal.img;
            document.querySelector("#details-image").alt = animal.name;

            document.querySelector("#details-weight").innerText = animal.weight;
            document.querySelector("#details-height").innerText = animal["height at the withers"];
            document.querySelector("#details-coat").innerText = animal["coat color"];
            document.querySelector("#details-eye").innerText = animal["eye color"];

        })
        .catch(showError);
}

function showError(error) {
    console.log(error);
}

loadAnimals("./webservice/actions.php", allAnimalsLoaded);

