
import  React,{ useState } from 'react';
import '../../css/Dashboard2.css'; 
import { Link } from '@inertiajs/react'

export function DashBoard ()   {
  return (
    <div className="dashboard-container">
      <aside className="sidebar">
        <h2 className="sidebar-title">Dashboard</h2>
        <ul className="sidebar-menu">
          <li className="sidebar-item"><a href="/dashboard">Home</a></li>
          <li className="sidebar-item"><a href="/usuarioget">Usuario</a></li>
          <li className="sidebar-item"><a href="/usuarioedit">Perfil</a></li>
          <li className="sidebar-item"><a href="/historial">Historial</a></li>
          <li className="sidebar-item"><a href="/ticketget">Tickets</a></li>
        </ul>
      </aside>
      <main className="main-content">
        <header className="header">
          <h1 className="header-title">Bienvenido (usuario)</h1>
        </header>
        <section className="content">
          <div className="card">
            <h3>Historia 1</h3>
            <p>Creacion de interfaz del sistema</p>
            <img src="" alt="historia1" />
          </div>
          <div className="card">
            <h3>Historia 2</h3>
            <p>Creacion de la base de datos</p>
            <img src="" alt="historia1" />
          </div>
          <div className="card">
            <h3>Historia 3</h3>
            <p>Creacion de modulo de tickets</p>
            <img src="" alt="historia1" />
          </div>
        </section>
      </main>
    </div>
  );
};