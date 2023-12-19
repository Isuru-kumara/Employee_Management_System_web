import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBell, faCircleUser, faEnvelope, faSearch } from '@fortawesome/free-solid-svg-icons';

function Header() {
  return (
    <div className='header'>
        <div className="me-auto">
            <div><FontAwesomeIcon icon={faSearch}/></div> 
        </div>
        <div className="ms-auto columnCard">
            <div className="px-2"><FontAwesomeIcon icon={faBell}/></div>
            <div className="px-2"><FontAwesomeIcon icon={faEnvelope}/></div> 
            <div className="px-2"><FontAwesomeIcon icon={faCircleUser}/></div> 
        </div>
    </div>
  )
}

export default Header