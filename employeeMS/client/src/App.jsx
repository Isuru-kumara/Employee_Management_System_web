import './App.css'
import Header from './components/Header' 
import Sidebar from './components/Sidebar' 
import 'bootstrap/dist/css/bootstrap.min.css';

function App() {

  return (
    <div className='grid-container'>
      <Header/>  
      <Sidebar/>          
    </div>
  )
}

export default App
