const getArrayDepth = (arr) => {
    if (Array.isArray(arr)) {
      // if arr is an array, recurse over it
      return 1 + Math.max(...arr.map(getArrayDepth));
    }
    if (arr.children && arr.children.length) {
      // if arr is an object with a children property, recurse over the children
      return 1 + Math.max(...arr.children.map(getArrayDepth));
    }
    return 0;
  }
  
  
  const a = [1, [[2, 3, [[4], 5], 6, [7, 8]], 9, [10, [[[11]]]], 12, 13], 14];
  
  const b = [{
    "name": "Car Parts",
    "children": [{
      "name": "Body Parts",
      "children": [{
        "name": "Bumpers & Components",
        "children": [{
          "name": "Bumper Grilles",
          "children": []
        }]
      }]
    }, {
      "name": "Engine Parts",
      "children": [{
        "name": "Alternators",
        "children": []
      }, {
        "name": "Injectors",
        "children": []
      }]
    }]
  }, {
    "name": "Wheels",
    "children": [{
      "name": "Alloy Wheels",
      "children": []
    }]
  }, {
    "name": "Lubricants & Coolants",
    "children": []
  }];
  
  console.log(`A: ${getArrayDepth(a)} ✓`);
  console.log(`B: ${getArrayDepth(b)} X (should be 4) `);