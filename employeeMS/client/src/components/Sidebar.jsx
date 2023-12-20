import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faArrowRightFromBracket, faMessage, faCalendarDays, faCircleUser, faGear, faHouse, faCoins, faBarsProgress, faPieChart } from '@fortawesome/free-solid-svg-icons';
import 'bootstrap/dist/css/bootstrap.min.css';
import Container from 'react-bootstrap/Container';
import Stack from 'react-bootstrap/Stack';

function Sidebar() {
  return (
    <div>
        <Container className='sidebar m-3'>
            <Stack gap={2} className='justify-content-center px-5 py-3'>
                <div className="rowCard"><FontAwesomeIcon icon={faHouse} className="px-2"/>Dashboard</div>
                <div className="rowCard"><FontAwesomeIcon icon={faCircleUser} className="px-2"/>Account</div>
                <div className="rowCard"><FontAwesomeIcon icon={faBarsProgress} className="px-2"/>Tasks</div>
                <div className="rowCard"><FontAwesomeIcon icon={faCalendarDays} className="px-2"/>Events</div>
                <div className="rowCard"><FontAwesomeIcon icon={faCoins} className="px-2"/>Payroll</div>                
                <div className="rowCard"><FontAwesomeIcon icon={faMessage} className="px-2"/>Messages</div>
                <div className="rowCard"><FontAwesomeIcon icon={faPieChart} className="px-2"/>Performance</div>
                <div className="rowCard"><FontAwesomeIcon icon={faGear} className="px-2"/>Settings</div>                
                <div className="rowCard"><hr/><FontAwesomeIcon icon={faArrowRightFromBracket} className="px-2"/>Logout</div>
            </Stack>
        </Container>        
    </div>    
  )
}

export default Sidebar



