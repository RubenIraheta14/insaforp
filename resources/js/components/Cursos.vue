<template>
  <div>
    <form>
      <div class="form-row" style="justify-content: center">
        <div class="col-5 mx-md-5">
          <form>
            <div class="input-group ms-3 has-validation">
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
                required="required"
                class="form-control"
                placeholder="Nombre del evento"
              />
            </div>

            <div class="input-group ms-3">
              <div class="input-group-prepend">
                <label
                  class="btn btn-outline-secondary"
                  type="button"
                  id="button-addon1"
                >
                  DESCRIPCIÓN
                </label>
              </div>
              <input
                type="text"
                v-model="acciones.descripcion"
                required="required"
                class="form-control"
                placeholder="Descripción del evento"
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
                required="required"
                type="date"
                class="form-control"
                v-model="acciones.inicio"
              />
              <input
                type="date"
                class="form-control"
                required
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
                required
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
                required
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
                required
                class="form-control"
                placeholder="Cantidad de horas del curso"
              />
            </div>
            <h5>
              <small class="text-muted text-left"
                >CALENDARIZACIÓN DEL EVENTO</small
              >
            </h5>
            <div class="input-group ms-3">
              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <h5>
                      <small class="text-muted text-left"> DIA</small>
                    </h5>
                  </div>
                  <div class="col-sm">
                    <h5>
                      <small class="text-muted text-left"> INICIO</small>
                    </h5>
                  </div>
                  <div class="col-sm">
                    <h5>
                      <small class="text-muted text-left"> FIN</small>
                    </h5>
                  </div>
                  <div class="col-sm">
                    <h5>
                      <small class="text-muted text-left"> ACCION</small>
                    </h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="input-group ms-3">
              <input
                v-model="articulo.dia"
                type="date"
                class="form-control"
                placeholder="$"
                aria-describedby="button-addon1"
              />
              <input
                v-model="articulo.inicio"
                type="time"
                class="form-control"
                aria-describedby="button-addon1"
              />
              <input
                v-model="articulo.fin"
                type="time"
                class="form-control"
                aria-describedby="button-addon1"
              />

              <div class="input-group-prepend">
                <button
                  @click="guardar(); modificar();"
                  
                  type="button"
                  class="btn btn-primary"
                >
                  Guardar
                </button>
              </div>
            </div>

            <div class="col-xs-8 col-xs-offset-2 well">
              <table class="table table-scroll table-striped">
                <tbody>
                  <tr v-if="asistencia"></tr>
                  <tr v-for="art in asistencia" :key="art.id">
                    <td>{{ art.dia }}</td>
                    <td>{{ art.inicio }}</td>
                    <td>{{ art.fin }}</td>
                    <td>
                      <label @click="eliminar(art.id)" class="text-danger"
                        >Eliminar</label
                      >
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
        <div class="col-4">
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
                id="inputGroupSelect01"
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
                  # PARTICIPANTES
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
                  CANTIDAD EVALUACIONES
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
            <button @click="addcursos()" type="sumbit" class="btn btn-primary">
              Guardar
            </button>
          </form>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      articulo: {
        dia: "2021-02-18",
        inicio: "08:00",
        fin: "12:00",
        id_curso: 1,
      },
      acciones: {
        nombre: "",
        descripcion: "",
        inicio: "2021-02-18",
        fin: "2021-02-18",
        departamento: "",
        municipio: "",
        horas: 80,
        modalidad: "",
        tipo_costo: "",
        costo: "",
        n_participantes: 20,
        n_evaluaciones: 6,
        n_contrato: 2458,
        orden: 10,
        orden_bolsa: 11,
        item: 1,
        programa: "",
        facilitador: "",
      },
      id:0,
      modal:0,
      asistencia: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get("/asistencia");
      this.asistencia = res.data;
    },

    async eliminar(id) {
      const res = await axios.delete("/asistencia/" + id);
      this.listar();
    },

    async guardar() {
      const res = await axios.post("/asistencia/", this.articulo);
      this.listar();
    },
    async addcursos() {
      const rest = await axios.post("/cursos/", this.acciones);

      this.listar();
    },
  },
  

  created() {
    this.listar();
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