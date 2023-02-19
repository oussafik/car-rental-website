import {
	cars
} from "./carsList.js";

const maxyear = new Date().getFullYear(),
	make = document.querySelector("#make"),
	year = document.querySelector("#year"),
	min = document.querySelector("#min"),
	max = document.querySelector("#max"),
	doors = document.querySelector("#doors"),
	transmission = document.querySelector("#transmission"),
	color = document.querySelector("#color"),
	carsContainer = document.querySelector("#cars-container"),
	searchFields = {
		make: "",
		carmodel: "",
		year: "",
		price: "",
		doors: "",
		color: "",
		transmission: ""
	};

let minyear = maxyear - 10;

for (let i = maxyear; i > minyear; i--) {
	let option = document.createElement("option");
	option.value = i;
	option.innerText = i;
	document.querySelector("#year").appendChild(option);
}

function clearHTML() {
	carsContainer.innerHTML = null;
}

function showCars(cars) {
	clearHTML();

	cars.forEach(car => {
		const TemplateHTML = `
		<div class="cars__single-car">
			<div class="cars__information">
				<h3 class="cars__title">${car.make} ${car.carmodel}</h3>
				<span class="cars__single-information">Production year: ${car.year}</span>
				<span class="cars__single-information">Doors: ${car.doors}</span>
				<span class="cars__single-information">Trasmission: ${car.transmission}</span>
				<span class="cars__single-information">Color: ${car.color}</span>
				<span class="cars__price">${car.price}$</span>
			</div>
			<div class="cars__picture">
				<img class="cars__image" src="images/cars/${car.id}.jpg" alt="${car.make} ${car.carmodel}">
			</div>
		</div>
		`;

		carsContainer.innerHTML += TemplateHTML;
	});
}

function noResult() {
	clearHTML();

	const noResultHTML = `
			<div class="no-result">
				<span class="no-result__title">No results found</span>
				<span class="no-result__description">You can change filters if you want find a car</span>
			</div>
		`;
	carsContainer.innerHTML = noResultHTML;
}

function filterCars() {
	const result = cars
		.filter(filterMake)
		.filter(filterYear)
		.filter(filterMinPrice)
		.filter(filterMaxPrice)
		.filter(filterDoors)
		.filter(filterTranssmision)
		.filter(filterColor);

	if (result.length) {
		showCars(result);
	} else {
		noResult();
	}
}

function filterMake(car) {
	if (searchFields.make) {
		return car.make === searchFields.make;
	} else {
		return car;
	}
}

function filterYear(car) {
	if (searchFields.year) {
		return car.year === searchFields.year;
	} else {
		return car;
	}
}

function filterMinPrice(car) {
	if (searchFields.min) {
		return car.price >= searchFields.min;
	} else {
		return car;
	}
}

function filterMaxPrice(car) {
	if (searchFields.max) {
		return car.price <= searchFields.max;
	} else {
		return car;
	}
}

function filterDoors(car) {
	if (searchFields.doors) {
		return car.doors === searchFields.doors;
	} else {
		return car;
	}
}

function filterTranssmision(car) {
	if (searchFields.transmission) {
		return car.transmission === searchFields.transmission;
	} else {
		return car;
	}
}

function filterColor(car) {
	if (searchFields.color) {
		return car.color === searchFields.color;
	} else {
		return car;
	}
}

document.addEventListener("DOMContentLoaded", () => {
	showCars(cars);
});

make.addEventListener("input", e => {
	searchFields.make = e.target.value;
	filterCars();
});

year.addEventListener("input", e => {
	searchFields.year = Number(e.target.value);
	filterCars();
});

min.addEventListener("input", e => {
	searchFields.min = Number(e.target.value);
	filterCars();
});

max.addEventListener("input", e => {
	searchFields.max = Number(e.target.value);
	filterCars();
});

doors.addEventListener("input", e => {
	searchFields.doors = Number(e.target.value);
	filterCars();
});

transmission.addEventListener("input", e => {
	searchFields.transmission = e.target.value;
	filterCars();
});

color.addEventListener("input", e => {
	searchFields.color = e.target.value;
	filterCars();
});