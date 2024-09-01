import React, { useState } from 'react';

import '../../css/ContactForm.css'; 



export function Ticketcreate  ()  {
    const [title, setTitle] = useState('');
    const [description, setDescription] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();

    setTitle('');
    setDescription('');
  };

  const handleChange = (event) => {
    const { name, value } = event.target;
    setFormData({
      ...formData,
      [name]: value,
    });
  };
  

  return (
    <div className="form-container">
      <h2 className="form-title">Crear Usuario</h2>
      <form onSubmit={handleSubmit} className="registration-form">
        <div className="form-group">
            <label htmlFor="title" className="form-label">Titulo</label>
            <input
                type="text"
                id="title"
                className="form-control"
                value={title}
                onChange={(e) => setTitle(e.target.value)}
            />
        </div>
        <div className="form-group">
            <label htmlFor="description" className="form-label">Descripcion</label>
            <textarea
                id="description"
                className="form-control"
                value={description}
                onChange={(e) => setDescription(e.target.value)}
            ></textarea>
        </div>
        
        <button type="submit" className="form-button btn btn-primary">CREAR TICKET</button>
      </form>
    </div>
  );
};


