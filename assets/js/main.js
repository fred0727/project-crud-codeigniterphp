window.onload = function () {
	cargarLista();
	$(document).ready(function () {
		$("#myTable").DataTable();
	});
	$("#form-create").submit((e) => {
		createPersona(e);
	});
};

function createPersona(e) {
	e.preventDefault();
	const nombre = e.target.nombre.value;
	const apellidop = e.target.apellidop.value;
	const apellidom = e.target.apellidom.value;
	const edad = e.target.edad.value;

	const xml = new XMLHttpRequest();
	xml.open("POST", "persona/createpersona");
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send(
		"nombre=" +
			nombre +
			"&apellidop=" +
			apellidop +
			"&apellidom=" +
			apellidom +
			"&edad=" +
			edad
	);
	xml.onreadystatechange = function () {
		if (this.readyState == 4) {
			if (Number(this.responseText) == 1) {
				console.log("exito");
				cargarLista();
				e.target.reset();
				e.target.nombre.focus();
			} else {
				console.log("error");
			}
		}
	};
}

function cargarLista() {
	const xml = new XMLHttpRequest();
	xml.open("GET", "persona/listadopersonas");
	xml.send();
	xml.onreadystatechange = function () {
		if (this.readyState == 4) {
			$("#view-personas").html(this.responseText);
			$("#myTable").DataTable();
		}
	};
}

function viewFormUpate(id) {
	const xml = new XMLHttpRequest();
	xml.open("GET", "persona/viewupdate/" + id);
	xml.send();
	xml.onreadystatechange = function () {
		if (this.readyState == 4) {
			$("#btnModal").click();
			$("#dialog-content").html(this.responseText);
			$("#form-update").submit((e) => {
				updatePerson(e);
			});
		}
	};
}

function updatePerson(e) {
	e.preventDefault();
	const id = e.target.idpersona.value;
	const nombre = e.target.nombreupdate.value;
	const apellidop = e.target.apellidopupdate.value;
	const apellidom = e.target.apellidomupdate.value;
	const edad = e.target.edadupdate.value;
	const xml = new XMLHttpRequest();
	xml.open("POST", "persona/updatepersona");
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send(
		"nombre=" +
			nombre +
			"&apellidop=" +
			apellidop +
			"&apellidom=" +
			apellidom +
			"&edad=" +
			edad +
			"&id=" +
			id
	);
	xml.onreadystatechange = function () {
		if (this.readyState == 4) {
			if (Number(this.responseText) == 1) {
				cargarLista();
				$("#formCreate").modal("toggle");
			} else {
				console.log("error");
			}
		}
	};
}

function deletePerson(id) {
	Swal.fire({
		title: "Estas seguro de eliminar?",
		text: "Este registro se eliminara completamente!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Si, eliminar!",
		cancelButtonText: "Cancelar",
	}).then((result) => {
		if (result.isConfirmed) {
			const xml = new XMLHttpRequest();
			xml.open("GET", "persona/deletepersona/" + id);
			xml.send();
			xml.onreadystatechange = function () {
				if (this.readyState == 4) {
					if (Number(this.responseText) == 1) {
						$("#item" + id).remove();
					} else {
						console.log("error");
					}
				}
			};
		}
	});
}
