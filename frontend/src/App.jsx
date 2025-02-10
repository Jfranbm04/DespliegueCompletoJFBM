import { useEffect, useState } from 'react';
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
function App() {
  const [message, setMessage] = useState('');
  useEffect(() => {
    fetch('/api/jfbm')
      .then((res) => res.json())
      .then((data) => setMessage(data.message));
  }, []);
  return (
    <div>
      <h1>Frontend en React de Juan Francisco Burgos</h1>
      <p>Esta aplicación se conecta al backend de Symfony pidiéndole una respuesta</p>
      <p>respuesta del Backend: {message || 'Espera un poco que el backend no está listo...'}</p>
    </div>
  );
}
export default App;