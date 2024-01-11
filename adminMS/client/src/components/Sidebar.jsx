import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faArrowRightFromBracket, faMessage, faCalendarDays, faCalendarDay, faCalendarCheck, faCircleUser, faBoxArchive, faHouse, faPieChart, faRectangleList, faMoneyBill1Wave } from '@fortawesome/free-solid-svg-icons';
import 'bootstrap/dist/css/bootstrap.min.css';
import Stack from 'react-bootstrap/Stack';
import Nav from 'react-bootstrap/Nav';

function Sidebar() {
  return (
    <div className='sidebar mx-3'>
      <Stack gap={2} className='justify-content-center px-5 py-3'>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faHouse} className="px-2"/>Dashboard</div></Nav.Link>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faCircleUser} className="px-2"/>Account</div></Nav.Link>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faBoxArchive} className="px-2"/>Departments</div></Nav.Link>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faCalendarCheck} className="px-2"/>Attendance</div></Nav.Link>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faRectangleList} className="px-2"/>Requests</div></Nav.Link>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faMoneyBill1Wave} className="px-2"/>Payments</div></Nav.Link>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faCalendarDays} className="px-2"/>Calendar</div></Nav.Link>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faCalendarDay} className="px-2"/>Leave Management</div></Nav.Link>                  
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faMessage} className="px-2"/>Messages</div></Nav.Link>
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faPieChart} className="px-2"/>Performance</div></Nav.Link><hr/>     
          <Nav.Link href="./pages/Home"><div className="rowCard"><FontAwesomeIcon icon={faArrowRightFromBracket} className="px-2"/>Logout</div></Nav.Link>
      </Stack>       
    </div>    
  )
}

export default Sidebar



