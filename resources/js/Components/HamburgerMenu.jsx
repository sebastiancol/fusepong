import React, { useState } from 'react';
import '../../css/HamburgerMenu.css'; 

export function HamburgerMenu ()  {
  const [isOpen, setIsOpen] = useState(false);

  const toggleMenu = () => {
    setIsOpen(!isOpen);
  };

  return (
    <nav className="navbar">
      <div className="hamburger" onClick={toggleMenu}>
        <div className={`line ${isOpen ? 'active' : ''}`}></div>
        <div className={`line ${isOpen ? 'active' : ''}`}></div>
        <div className={`line ${isOpen ? 'active' : ''}`}></div>
      </div>
      <ul className={`menu ${isOpen ? 'open' : ''}`}>
        <li className="menu-item"><a href="#home">LOGIN</a></li>
        <li className="menu-item"><a href="#about">USUARIOS</a></li>
        <li className="menu-item"><a href="#services">TICKETS</a></li>
        <li className="menu-item"><a href="#contact">HISTORIAL</a></li>
      </ul>
    </nav>
  );
};