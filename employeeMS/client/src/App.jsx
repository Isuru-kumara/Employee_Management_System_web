import './App.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import Card from 'react-bootstrap/Card';
import NavDropdown from 'react-bootstrap/NavDropdown';
import Stack from 'react-bootstrap/Stack';
import Container from 'react-bootstrap/Container';

function App() {

  return (
    <div>
      {/* <div style={{width: 260, height: 889, background: 'white', boxShadow: '0px 4px 4px rgba(0, 0, 0, 0.25)', borderRadius: 39}} />
      <Card style={{ width: '18rem' }}> */}
      <Container fluid>
        <Card style={{ width: '18rem' }}>
            
            <Stack gap={3} className='text-center'>
                <div className="rowCard"><FontAwesomeIcon icon={faHouse}/>Dashboard</div>
                <div className="rowCard">Account</div><FontAwesomeIcon icon={faCircleUser} />
                <div className="rowCard">Tasks</div><FontAwesomeIcon icon={faCalendarDays} />
                <div className="rowCard">Payroll</div><FontAwesomeIcon icon={faHandHoldingDollar} />
                <div className="rowCard">Messages</div><FontAwesomeIcon icon={faMessage} />
                <div className="rowCard">Settings</div><FontAwesomeIcon icon={faGear} />
                <NavDropdown.Divider />
                <div className="rowCard">Logout</div><FontAwesomeIcon icon={faArrowRightFromBracket} />
            </Stack>
            <Card.Body>                
                
            </Card.Body>
        </Card> 
      </Container>
            
    </div>
  )
}

export default App
