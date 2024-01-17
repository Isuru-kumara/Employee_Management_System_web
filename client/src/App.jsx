import './App.css'
import HeaderEM from './components/HeaderEM'
import SidebarEM from './components/SidebarEM' 
import DashboardEM from './pages/DashboardEM'
import 'bootstrap/dist/css/bootstrap.min.css';

function App() {

  return (
    <div className='grid-container'>
      <HeaderEM/>  
      <SidebarEM/>    
      <DashboardEM/>      
    </div>
  )
}

export default App
