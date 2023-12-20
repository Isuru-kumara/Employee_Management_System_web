import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faArrowRightFromBracket, faMessage, faCalendarDays, faCircleUser, faHouse, faCoins, faPieChart, faRectangleList } from '@fortawesome/free-solid-svg-icons';
import 'bootstrap/dist/css/bootstrap.min.css';
import Container from 'react-bootstrap/Container';
import Stack from 'react-bootstrap/Stack';
import Nav from 'react-bootstrap/Nav';

function Sidebar() {
  return (
    <div>
        <Container className='sidebar m-3'>
            <Stack gap={2} className='justify-content-center px-5 py-3'>
                <Nav.Link href="./pages/home"><div className="rowCard"><FontAwesomeIcon icon={faHouse} className="px-2"/>Dashboard</div></Nav.Link>
                <Nav.Link href="./pages/home"><div className="rowCard"><FontAwesomeIcon icon={faCircleUser} className="px-2"/>Account</div></Nav.Link>
                <Nav.Link href="./pages/home"><div className="rowCard"><FontAwesomeIcon icon={faRectangleList} className="px-2"/>Requests</div></Nav.Link>
                <Nav.Link href="./pages/home"><div className="rowCard"><FontAwesomeIcon icon={faCalendarDays} className="px-2"/>Calendar</div></Nav.Link>
                <Nav.Link href="./pages/home"><div className="rowCard"><FontAwesomeIcon icon={faCoins} className="px-2"/>Payroll</div></Nav.Link>                
                <Nav.Link href="./pages/home"><div className="rowCard"><FontAwesomeIcon icon={faMessage} className="px-2"/>Messages</div></Nav.Link>
                <Nav.Link href="./pages/home"><div className="rowCard"><FontAwesomeIcon icon={faPieChart} className="px-2"/>Performance</div></Nav.Link>                
                <Nav.Link href="./pages/home"><div className="rowCard"><hr/><FontAwesomeIcon icon={faArrowRightFromBracket} className="px-2"/>Logout</div></Nav.Link>
            </Stack>
        </Container>        
    </div>    
  )
}

export default Sidebar



