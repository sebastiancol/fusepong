import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';

const DashBoard = ({ tickets }) => {
    const [title, setTitle] = useState('');
    const [description, setDescription] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();

        Inertia.post('/tickets', {
            title,
            description
        });

        setTitle('');
        setDescription('');
    };

    return (
        <div className="container">
            <h1>Ticket Dashboard</h1>

            <form onSubmit={handleSubmit} className="mb-4">
                <div className="mb-3">
                    <label htmlFor="title" className="form-label">Title</label>
                    <input
                        type="text"
                        id="title"
                        className="form-control"
                        value={title}
                        onChange={(e) => setTitle(e.target.value)}
                    />
                </div>

                <div className="mb-3">
                    <label htmlFor="description" className="form-label">Description</label>
                    <textarea
                        id="description"
                        className="form-control"
                        value={description}
                        onChange={(e) => setDescription(e.target.value)}
                    ></textarea>
                </div>

                <button type="submit" className="btn btn-primary">Create Ticket</button>
            </form>

            <h2>All Tickets</h2>
            <ul className="list-group">
                {tickets.map(ticket => (
                    <li key={ticket.id} className="list-group-item">
                        <h5>{ticket.title}</h5>
                        <p>{ticket.description}</p>
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default DashBoard