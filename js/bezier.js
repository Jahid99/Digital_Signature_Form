    stats = function(a) {
      var r = {mean: 0, variance: 0, deviation: 0}, t = a.length;
      for(var m, s = 0, l = t; l--; s += a[l]);
      for(m = r.mean = s / t, l = t, s = 0; l--; s += Math.pow(a[l] - m, 2));
      return r.deviation = Math.sqrt(r.variance = s / t), r;
    }

    // Matrices look like this:
    // q = [[1,2,3],
    //      [4,5,6],
    //      [7,3,9]];

    // M x B = C
    // M-1 x M x B = M-1 x C
    // I x B = M-1 x C

    var generate141Matrix = function(N) {
      result = [];
      for (var row = 0; row < N; row++) {
        var newRow = [];
        for (var col = 0; col < N; col++) {
          if (col == row) {
            newRow.push(4);
          } else if (Math.abs(row - col) == 1) {
            newRow.push(1);
          } else {
            newRow.push(0);
          };
        };
        result.push(newRow);
      }
      return result;
    };

    var generateConstantMatrix = function (sampledPoints) {
      // given an vector of N points, this should return N-2 ordered pairs
      result = [];
      result.push(
        numeric.sub(numeric.mul(sampledPoints[1], 6),
        sampledPoints[0])
      );
      for (i = 2; i < sampledPoints.length - 2; i++) {
        result.push( numeric.mul(sampledPoints[i], 6) );
      }
      result.push(
        numeric.sub(numeric.mul(sampledPoints[sampledPoints.length - 2], 6),
        sampledPoints[sampledPoints.length - 1])
      );
      return result;
    }

    var convertBSplineControlPointsToBezierControlPoints = function(BSplinePoints) {
      // Each Bezier curve has P0 and P3 (endpoints) == sampled points, and the
      // intermediate points P1 and P2 are 1/3 & 2/3 along the way between the BSpline
      // control points

      var beziers = [];
      for (var i = 0; i < BSplinePoints.length - 1; i++) {

        // bezier control points are:
        if (i == 0) {
          // First one is a special case
          var p0 = BSplinePoints[0];
        } else {
          var p0 = p3;
        }

        var p1 = numeric.add( numeric.mul(2/3, BSplinePoints[i]),
                              numeric.mul(1/3, BSplinePoints[i + 1])
                            );
        var p2 = numeric.add( numeric.mul(1/3, BSplinePoints[i]),
                              numeric.mul(2/3, BSplinePoints[i + 1])
                            );
        if (i == BSplinePoints.length - 2) {
          // Last one is a special case
          var p3 = BSplinePoints[BSplinePoints.length - 1];
        } else {
          var p3 = numeric.add( numeric.mul(1/6, BSplinePoints[i]),
                                numeric.mul(2/3, BSplinePoints[i + 1]),
                                numeric.mul(1/6, BSplinePoints[i + 2])
                              );
        }

        var bezierSegmentControlPoints = [p0, p1, p2, p3];
        beziers.push(bezierSegmentControlPoints);
      }
      return beziers;
    };

    var getBezierControlPoints = function(sampledPoints) {
      if (sampledPoints.length < 4) {
        // We need 4 sampled points to draw a *cubic* bezier through those points
        // These 3 cases are for shorter lengths: single point, line, quadratic
        if (sampledPoints.length === 3) {
            beziers =[sampledPoints[0], sampledPoints[1], sampledPoints[1], sampledPoints[2]];
            return [beziers]
        } else if (sampledPoints.length === 2) {
            beziers = [sampledPoints[0], sampledPoints[0], sampledPoints[1], sampledPoints[1]]
            return [beziers]
        } else if (sampledPoints.length === 1) {
            beziers = [sampledPoints[0], sampledPoints[0], sampledPoints[0], sampledPoints[0]];
            return [beziers]
        };
      }

      // Below here we have enough points to generate a cubic bezier
      var M = generate141Matrix(sampledPoints.length - 2);
      var C = generateConstantMatrix(sampledPoints);
      var B = numeric.dot(numeric.inv(M), C);

      // B-spline control points also include the endpoints of the sampled data
      // These are the B Splines3
      B.splice(0, 0, sampledPoints[0]);
      B.push(sampledPoints[sampledPoints.length - 1]);
      var beziers = convertBSplineControlPointsToBezierControlPoints(B);
      return beziers;

    }

    /*

    How does this basically work? Like this:

    var M = generate141Matrix(3);

    var sampledPoints = [[1,-1],
                         [-1,2],
                         [1,4],
                         [4,3],
                         [7,5]]
    var C = generateConstantMatrix(sampledPoints);
    var B = numeric.dot(numeric.inv(M), C);
    convertBSplineControlPointsToBezierControlPoints(B);
    */


