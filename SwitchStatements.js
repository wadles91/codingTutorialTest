function getDayName(dayNum){
  var day;

  switch(dayNum){
    case 0:
      day="Sunday";
      break;
    case 1:
      day="Monday";
      break;
    case 2:
      day="Tuesday";
      break;
    case 3:
      day="Wednesday";
      break;
    case 4:
      day="Thursday";
      break;
    case 5:
      day="Friday";
      break;
    case 6:
      day="Saturday";
      break;
    default:
      day= "Day doesn't exist, "+dayNum+" is not a valid day."
}

  return day;
}

document.write(getDayName(3));
