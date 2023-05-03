import "./bootstrap";
import "../sass/app.scss";
import "./jquery.dataTables";
import "./dataTables.buttons";
import "./dataTables.buttons";
import "./jszip.min";
// import "./pdfmake";
// import "./vfs_fonts";

import * as bootstrap from "bootstrap";

import jQuery from "jquery";
window.$ = jQuery;
// import DateTime from 'datatables.net-datetime';
import DataTable from "datatables.net-bs5";
DataTable(window, window.$);
// import '../sass/app.scss';
import 'laravel-datatables-vite';
// Datatable excel button
import JSZip from 'jszip';
//
window.JSZip = JSZip;
import Alpine from 'alpinejs';

import 'datatables.net-buttons-dt';
import 'datatables.net-buttons/js/buttons.html5.mjs';
// const DateTime = require('datatables.net-datetime')();

window.Alpine = Alpine;

Alpine.start();
