<template>
  <div>
    <div class="row">
      <div class="col-3">
        <div
          class="nav flex-column nav-pills"
          id="v-pills-tab"
          role="tablist"
          aria-orientation="vertical"
        >
          <a
            class="nav-link active"
            id="v-pills-home-tab"
            data-toggle="pill"
            href="#v-pills-home"
            role="tab"
            aria-controls="v-pills-home"
            aria-selected="true"
            >Calendarizar cursos</a
          >
          <a
            class="nav-link"
            id="v-pills-inscribir-tab"
            data-toggle="pill"
            href="#v-pills-profile"
            role="tab"
            aria-controls="v-pills-profile"
            aria-selected="false"
            >Inscribir Alumnos</a
          >
          <a
            class="nav-link"
            id="v-pills-asistencia-tab"
            data-toggle="pill"
            href="#v-pills-asistencia"
            role="tab"
            aria-controls="v-pills-asistencia"
            aria-selected="false"
            >Asistencias</a
          >
          <a
            class="nav-link"
            id="v-pills-messages-tab"
            data-toggle="pill"
            href="#v-pills-messages"
            role="tab"
            aria-controls="v-pills-messages"
            aria-selected="false"
            >Notas</a
          >
          <a
            class="nav-link"
            id="v-pills-settings-tab"
            data-toggle="pill"
            href="#v-pills-settings"
            role="tab"
            aria-controls="v-pills-settings"
            aria-selected="false"
            >Informe</a
          >
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="v-pills-home"
            role="tabpanel"
            aria-labelledby="v-pills-home-tab"
          >
            <form>
              <div class="form-row" style="justify-content: center">
                <div class="col-5">
                  <form>
                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="buttonaddon1"
                        >
                          NOMBRE
                        </label>
                      </div>
                      <input
                        type="text"
                        id="txt_nombre"
                        v-model="acciones.nombre"
                        class="form-control"
                        placeholder="Nombre del evento"
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          for="id_curso"
                          class="btn btn-outline-secondary"
                          type="button"
                        >
                          CODIGO
                        </label>
                      </div>
                      <input
                        required
                        id="id_curso"
                        v-model="asistencia.id_curso"
                        class="form-control"
                        placeholder="Codigo del curso"
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          INICIO/FIN
                        </label>
                      </div>
                      <input
                        type="date"
                        class="form-control"
                        v-model="acciones.inicio"
                      />
                      <input
                        type="date"
                        class="form-control"
                        v-model="acciones.fin"
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          DEPTO.
                        </label>
                      </div>
                      <select
                        class="custom-select"
                        id="inputGroupSelect01"
                        v-model="acciones.departamento"
                      >
                        <option selected>Sonsonate.</option>
                        <option value="1">San Salvador</option>
                        <option value="2">Usulutan</option>
                        <option value="3">La Libertad</option>
                      </select>
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          MUNIC.
                        </label>
                      </div>
                      <select
                        class="custom-select"
                        id="inputGroupSelect01"
                        v-model="acciones.municipio"
                      >
                        <option selected>Izalco.</option>
                        <option value="1">Santa Elena</option>
                        <option value="2">Santa Tecla</option>
                        <option value="3">Lourdes</option>
                      </select>
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          HORAS
                        </label>
                      </div>
                      <input
                        v-model="acciones.horas"
                        type="text"
                        class="form-control"
                        placeholder="Cantidad de horas del curso"
                      />
                    </div>

                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                          Dia
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                          Inicio
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                          Fín
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                          Acción
                        </li>
                      </ol>
                    </nav>

                    <div class="input-group ms-3">
                      <input
                        v-model="asistencia.dia"
                        type="date"
                        class="form-control"
                        placeholder="$"
                        aria-describedby="button-addon1"
                      />
                      <input
                        v-model="asistencia.inicio"
                        type="time"
                        class="form-control"
                        aria-describedby="button-addon1"
                      />
                      <input
                        v-model="asistencia.fin"
                        type="time"
                        class="form-control"
                        aria-describedby="button-addon1"
                      />
                      <div class="input-group-prepend">
                        <button
                          @click="guardar()"
                          type="button"
                          id="formSubmit"
                          class="btn btn-outline-primary"
                        >
                          Guardar
                        </button>
                      </div>
                    </div>

                    <div class="col-xs-8 col-xs-offset-2 well">
                      <table class="table table-scroll table-striped">
                        <tbody>
                          <tr v-for="art in asistencias" :key="art.id">
                            <td class="p-1 text-center">
                              <small>{{ art.dia }}</small>
                            </td>
                            <td class="p-1 text-center">
                              <small class="text-justify">{{
                                art.inicio
                              }}</small>
                            </td>
                            <td class="p-1 text-center">
                              <small>{{ art.fin }}</small>
                            </td>
                            <td class="p-1 text-center">
                              <button
                                @click="eliminar(art.id)"
                                type="button"
                                class="btn text-danger p-0"
                              >
                                Eliminar
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>
                <div class="col-5 ml-3">
                  <form>
                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          MODALIDAD
                        </label>
                      </div>
                      <select
                        class="custom-select"
                        id="inputGroupSelect01"
                        v-model="acciones.modalidad"
                      >
                        <option selected>Virutual - Distancia</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          TIPO COSTO
                        </label>
                      </div>
                      <select
                        class="custom-select"
                        required
                        v-model="acciones.tipo_costo"
                      >
                        <option selected>Participante / Curso</option>
                        <option value="1">Cursos</option>
                        <option value="2">Accion formativa</option>
                      </select>
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          COSTO
                        </label>
                      </div>
                      <input
                        required
                        v-model="acciones.costo"
                        type="text"
                        class="form-control"
                        placeholder="$"
                      />
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          # PARTI.
                        </label>
                      </div>
                      <input
                        type="text"
                        v-model="acciones.n_participantes"
                        class="form-control"
                        placeholder="#"
                        requiredrequired
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          # EVALUACIONES
                        </label>
                      </div>
                      <input
                        v-model="acciones.n_evaluaciones"
                        type="text"
                        required
                        placeholder="# de Evaluaciones"
                        class="form-control"
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          CONTRARTO
                        </label>
                      </div>
                      <input
                        required
                        v-model="acciones.n_contrato"
                        type="text"
                        placeholder="#Contrato"
                        class="form-control"
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          ORDEN DE COMPRA
                        </label>
                      </div>
                      <input
                        type="text"
                        v-model="acciones.orden"
                        placeholder="#Orden de compra"
                        class="form-control"
                        required
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          #COMPRA BOLSA
                        </label>
                      </div>
                      <input
                        type="text"
                        v-model="acciones.orden_bolsa"
                        placeholder="#de Compra en bolsa"
                        class="form-control"
                        required
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          #ITEM
                        </label>
                      </div>
                      <input
                        type="text"
                        required
                        v-model="acciones.item"
                        placeholder="#Item"
                        class="form-control"
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          PROGRAMA
                        </label>
                      </div>
                      <select
                        class="custom-select"
                        required
                        v-model="acciones.programa"
                        id="inputGroupSelect01"
                      >
                        <option selected>HABIL TECNICO PERMANENTE</option>
                        <option value="1">EMPRESA CENTRO</option>
                        <option value="2">PROYECTOS ESPECIALES</option>
                        <option value="3">JUNIOR</option>
                      </select>
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          FACILITADOR
                        </label>
                      </div>
                      <select
                        class="custom-select"
                        required
                        v-model="acciones.facilitador"
                        id="inputGroupSelect01"
                      >
                        <option selected>Noé Enrique Perez</option>
                        <option value="1">Carlos Nehemias Gonzalez</option>
                        <option value="2">Ramiro Ernesto Lopez</option>
                        <option value="3">Juan Jose Canales Ochoa</option>
                      </select>
                    </div>
                    <button
                      @click="addcursos()"
                      type="button"
                      class="btn btn-outline-primary btn-lg btn-block"
                    >
                      Guardar
                    </button>
                  </form>
                </div>
              </div>
            </form>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-profile"
            role="tabpanel"
            aria-labelledby="v-pills-profile-tab"
          >
            <form>
              <div class="form-row" style="justify-content: center">
                <div class="col-5">
                  <form>
                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="buttonaddon1"
                        >
                          CODIGO
                        </label>
                      </div>
                      <input
                        type="text"
                        id="txt_nombre"
                        v-model="alumno.id_curso"
                        class="form-control"
                        placeholder="Codigo del curso"
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          for="id_curso"
                          class="btn btn-outline-secondary"
                          type="button"
                        >
                          NOMBRES
                        </label>
                      </div>
                      <input
                        required
                        v-model="alumno.nombres"
                        class="form-control"
                        placeholder="Nombres"
                      />
                    </div>

                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          APELLIDOS
                        </label>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Apellidos"
                        v-model="alumno.apellidos"
                      />
                    </div>
                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          DUI
                        </label>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="DUI"
                        v-model="alumno.dui"
                      />
                    </div>
                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          EDAD
                        </label>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="EDAD"
                        v-model="alumno.edad"
                      />
                    </div>
                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          CIUDAD
                        </label>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="CIUDAD"
                        v-model="alumno.ciudad"
                      />
                    </div>
                    <div class="input-group ms-3">
                      <div class="input-group-prepend">
                        <label
                          class="btn btn-outline-secondary"
                          type="button"
                          id="button-addon1"
                        >
                          ESCOLARIDAD
                        </label>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Escolaridad"
                        v-model="alumno.escolaridad"
                      />
                    </div>
                    <button
                      type="button"
                      @click="guardar_alumno()"
                      class="btn btn-primary"
                    >
                      Guardar
                    </button>
                  </form>
                </div>
                <div class="col-6 ml-3">
                  <small>LISTADO DE ALUMNOS INSCRITOS</small>
                  <form>
                    <div class="col-xs-8 col-xs-offset-2 well">
                      <table class="table table-scroll table-striped">
                        <tbody>
                          <tr v-for="art in alumnos" :key="art.id">
                            <td class="p-1 text-center">
                              <small>{{ art.id_curso }}</small>
                            </td>
                            <td class="p-1 text-center">
                              <small class="text-justify">{{ art.dui }}</small>
                            </td>
                            <td class="p-1 text-center">
                              <small>{{ art.nombres }}</small>
                              <small>{{ art.apellidos }}</small>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>
              </div>
            </form>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-asistencia"
            role="tabpanel"
            aria-labelledby="v-pills-asistencia-tab"
          >
            <nav class="navbar navbar-light bg-light">
              <form class="form-inline">
                <input
                  class="form-control mr-sm-2"
                  type="text"
                  placeholder="Codigo del curso"
                />
                <button
                  class="btn btn-outline-primary my-2 my-sm-0"
                  name="search"
                  type="button"
                >
                  Buscar
                </button>
              </form>
            </nav>

            <form>
              <div class="col-xs-8 col-xs-offset-2 well">
                <table class="table table-scroll table-striped">
                  <thead>
                    <tr v-for="dia in asistencias" :key="dia.id">
                      <th scope="col">
                        <small>{{ dia.dia }}</small>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="art in alumnos" :key="art.id">
                      <td class="p-1 text-center">
                        <small>{{ art.nombres }}</small>
                      </td>
                      <td class="p-1 text-center">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="exampleCheck1"
                        />
                      </td>
                      <td class="p-1 text-center">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="exampleCheck1"
                        />
                      </td>
                      <td class="p-1 text-center">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="exampleCheck1"
                        />
                      </td>
                      <td class="p-1 text-center">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="exampleCheck1"
                        />
                      </td>
                      <td class="p-1 text-center">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="exampleCheck1"
                        />
                      </td>
                      <td class="p-1 text-center">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="exampleCheck1"
                        />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
          </div>
          <div
            class="tab-pane fade"
            id="v-pills-messages"
            role="tabpanel"
            aria-labelledby="v-pills-messages-tab"
          >
            .y.
          </div>
          <div
            class="tab-pane fade"
            id="v-pills-settings"
            role="tabpanel"
            aria-labelledby="v-pills-settings-tab"
          >
            ...
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import swal from "sweetalert";
export default {
  data() {
    return {
      errors: [],
      asistencia: {
        id: [],
        dia: null,
        inicio: null,
        fin: null,
        id_curso: null,
      },

      asistencias: [],

      alumno: {
        id_curso: [],
        nombres: [],
        apellidos: [],
        dui: [],
        edad: [],
        ciudad: [],
        escolaridad: [],
      },
      alumnos: [],

      acciones: {
        nombre: [],
        inicio: [],
        fin: [],
        departamento: [],
        municipio: [],
        horas: [],
        modalidad: [],
        tipo_costo: [],
        costo: [],
        n_participantes: [],
        n_evaluaciones: [],
        n_contrato: [],
        orden: [],
        orden_bolsa: [],
        item: [],
        programa: [],
        facilitador: [],
      },
    };
  },
  methods: {
    async listar() {
      const res = await axios.get("/asistencia");
      this.asistencias = res.data;
    },
    async eliminar(id) {
      swal({
        title: "Estas seguro?",
        text: "Una vez eliminado no podras recuperar la fecha",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          axios.delete("asistencia/" + id);
          this.listar();
          swal("La fecha fué eliminada del curso", {
            icon: "success",
          });
        }
      });
    },
    async listar_alumno() {
      const res = await axios.get("/alumno");
      this.alumnos = res.data;
    },

    async guardar() {
      const res = await axios.post("/asistencia/", this.asistencia);
      this.listar();
    },

    async guardar_alumno() {
      swal({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yiss!",
      });

      const res = await axios.post("/alumno/", this.alumno);
      this.listar_alumno();
    },

    async addcursos() {
      swal({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yiss!",
      });
      const rest = await axios.post("/cursos/", this.acciones);
      this.listar();
    },
  },

  created() {
    this.listar();
    this.listar_alumno();
  },
};
</script>

<style type="text/css">
.well {
  background: none;
  height: 100px;
}

.table-scroll tbody {
  position: absolute;
  overflow-y: scroll;
  height: 175px;
}

.table-scroll tr {
  width: 100%;
  table-layout: fixed;
  display: inline-table;
}
</style>