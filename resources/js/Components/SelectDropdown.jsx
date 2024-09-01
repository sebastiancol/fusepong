import  React,{ useState } from 'react';
import '../../css/SelectDropdown.css'; 

export function SelectDropdown  ()  {
  const [selectedOption, setSelectedOption] = useState('');

  const options = ['Empresa 1', 'Empresa 2', 'Empresa 3', 'Empresa 4'];

  const handleSelectChange = (event) => {
    setSelectedOption(event.target.value);
  };

  return (
    <div className="select-dropdown-container">
      <label htmlFor="options" className="select-label">Selecciona una opcion:</label>
      <select
        id="options"
        value={selectedOption}
        onChange={handleSelectChange}
        className="select-dropdown"
      >
        <option value="" disabled></option>
        {options.map((option, index) => (
          <option key={index} value={option}>{option}</option>
        ))}
      </select>
    </div>
  );
};
