<?php echo json_encode( array(
                'email'  => $person->getEmail(),
                'telefono'  => $person->getPhone(),
                'persona'  => $school->getLetter().'_'.$person->getId(),
          ))?>