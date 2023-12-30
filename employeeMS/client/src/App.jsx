import './App.css'
import Header from './components/Header' 
import Sidebar from './components/Sidebar' 
import Dashboard from './pages/Dashboard'
import 'bootstrap/dist/css/bootstrap.min.css';

function App() {

  return (
    <div className='grid-container'>
      <Header/>  
      <Sidebar/>    
      <Dashboard/>      
    </div>
  )
}

export default App
