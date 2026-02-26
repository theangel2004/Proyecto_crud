<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>CRUD Perfiles</title>

<style>
body{
    font-family: 'Segoe UI', system-ui, sans-serif;
    background:#0f172a;
    margin:0;
    padding:40px;
    color:#e5e7eb;
}

h1{
    text-align:center;
    margin-bottom:40px;
    font-size:32px;
    font-weight:800;
    color:#f8fafc;
}

.layout{
    display:grid;
    grid-template-columns:300px 1fr;
    gap:35px;
    max-width:1200px;
    margin:auto;
}

.card{
    background:#020617;
    padding:30px;
    border-radius:6px;
    border:1px solid #1e293b;
}

label{
    font-weight:600;
    margin-top:16px;
    display:block;
    font-size:13px;
    color:#94a3b8;
    text-transform:uppercase;
    letter-spacing:.05em;
}

input{
    width:100%;
    padding:12px;
    margin-top:8px;
    border-radius:4px;
    border:1px solid #1e293b;
    font-size:14px;
    background:#020617;
    color:#e5e7eb;
}

input:focus{
    outline:none;
    border-color:#22d3ee;
    background:#020617;
}

button{
    margin-top:22px;
    width:100%;
    padding:13px;
    border:none;
    border-radius:4px;
    background:#22d3ee;
    color:#020617;
    font-size:15px;
    font-weight:700;
    cursor:pointer;
    text-transform:uppercase;
    letter-spacing:.05em;
}

button:hover{
    background:#67e8f9;
}

.btn-cancel{
    background:transparent;
    border:1px solid #334155;
    text-decoration:none;
    display:block;
    text-align:center;
    margin-top:14px;
    padding:12px;
    border-radius:4px;
    color:#94a3b8;
    text-transform:uppercase;
    font-size:13px;
}

.btn-cancel:hover{
    background:#020617;
    color:#f8fafc;
}

.alert{
    max-width:1200px;
    margin:0 auto 25px auto;
    padding:16px;
    border-radius:4px;
    text-align:center;
    font-weight:600;
    border-left:6px solid;
}

.ok{
    background:#022c22;
    color:#6ee7b7;
    border-color:#10b981;
}

.err{
    background:#450a0a;
    color:#fca5a5;
    border-color:#ef4444;
}

.table{
    width:100%;
    border-collapse:collapse;
    background:#020617;
}

.table th{
    background:#020617;
    color:#38bdf8;
    padding:16px;
    text-align:left;
    font-size:13px;
    text-transform:uppercase;
    border-bottom:2px solid #1e293b;
}

.table td{
    padding:16px;
    border-bottom:1px solid #1e293b;
    color:#e5e7eb;
}

.table tr:hover{
    background:#020617;
}

.action{
    padding:6px 14px;
    border-radius:4px;
    font-size:12px;
    text-decoration:none;
    color:#020617;
    font-weight:700;
    text-transform:uppercase;
}

.edit{
    background:#38bdf8;
}

.delete{
    background:#f87171;
}

@media(max-width:900px){
    .layout{
        grid-template-columns:1fr;
    }
}
</style>

</head>

<body>

<h1>Gestión de Perfiles</h1>